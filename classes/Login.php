<?php

/**
 * Class login
 * Processa o processo de logon e logon do usuário
 */
class Login
{
    /**
     * @var Objeto de conexão do banco de dados
     */
    private $db_connection = null;
    /**
     * @var Array Coleção de mensagens de erro
     */
    public $errors = array();
    /**
     * @var Matriz Coleção de mensagens de sucesso / neutro
     */
    public $messages = array();

    /**
     * A função "__construct ()" é iniciada automaticamente sempre que um objeto dessa classe é criado,
     * quando você faz "$ login = new Login ();"
     */
    public function __construct()
    {
        // Criar / ler sessão
        session_start();

        // Verifique as possíveis ações de login:
        //Se o usuário tentou efetuar logout (acontece quando o usuário clica no botão de logout)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // Login via post dados (se o usuário acaba de enviar um formulário de login)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    /**
     * Efetuar login com dados de postagem
     */
    private function dologinWithPostData()
    {
        // Verificar o conteúdo do formulário de login
        if (empty($_POST['user_name'])) {
            $this->errors[] = "O campo de nome de usuário estava vazio.";
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "O campo de senha estava vazio.";
        } elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {

            // Criar uma conexão de banco de dados, usando as constantes de config / db.php (que carregamos em index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // Alterar o conjunto de caracteres para utf8 e verificá-lo
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // Se não há erros de conexão (= conexão de banco de dados de trabalho)
            if (!$this->db_connection->connect_errno) {

                //Escapar do material POST
                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);

                // Consulta do banco de dados, obtendo todas as informações do usuário selecionado (permite login via
                // Campo de nome de usuário)
                $sql = "SELECT user_name, user_email, user_password_hash
                        FROM users
                        WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "';";
                $result_of_login_check = $this->db_connection->query($sql);

                // Se esse usuário existir
                if ($result_of_login_check->num_rows == 1) {

                    // obter resultado de linha (como um objeto)
                    $result_row = $result_of_login_check->fetch_object();

                    // Usando a função password_verify () do PHP 5.5 para verificar se a senha fornecida se encaixa
                    //o hash da senha do usuário
                    if (password_verify($_POST['user_password'], $result_row->user_password_hash)) {

                        // Escreve dados do usuário em PHP SESSION (um arquivo do servidor)
                        $_SESSION['user_name'] = $result_row->user_name;
                        $_SESSION['user_email'] = $result_row->user_email;
                        $_SESSION['user_login_status'] = 1;

                    } else {
                        $this->errors[] = "Senha incorreta. Tente novamente.";
                    }
                } else {
                    $this->errors[] =  "Usuário não existe.";
                }
            } else {
                $this->errors[] = "Problema de conexão de banco de dados.";
            }
        }
    }

    /**
     *Executar o logout
     */
    public function doLogout()
    {
        // Excluir a sessão do usuário
        $_SESSION = array();
        session_destroy();
        // Retornar uma pequena mensagem de feedback
  // $this->messages[] = "Você foi desconectado.";

    }

    /**
     * Simplesmente retornar o estado atual do login do usuário
     * @return Status de login do usuário booleano
     */
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // Retorno padrão
        return false;
    }
}
