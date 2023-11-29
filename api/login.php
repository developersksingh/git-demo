<?php
// required headers
header("Access-Control-Allow-Origin: http://localhost/rest-api-authentication-example/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// database connection will be here
// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/user.php';
// get database connection
$database = new Database();
$db = $database->getConnection();
// instantiate user object
$user = new User($db);
// check email existence here// get posted data
$data = json_decode(file_get_contents("php://input"));
// set product property values
$user->email = $data->email;
$email_exists = $user->emailExists();
// files for jwt will be here// check if given email exist in the database
function emailExists(){
    // query to check if email exists
    $query = "SELECT id, firstname, lastname, password
            FROM " . $this->table_name . "
            WHERE email = ?
            LIMIT 0,1";
    // prepare the query
    $stmt = $this->conn->prepare( $query );
    // sanitize
    $this->email=htmlspecialchars(strip_tags($this->email));
    // bind given email value
    $stmt->bindParam(1, $this->email);
    // execute the query
    $stmt->execute();
    // get number of rows
    $num = $stmt->rowCount();
    // if email exists, assign values to object properties for easy access and use for php sessions
    if($num>0){
        // get record details / values
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // assign values to object properties
        $this->id = $row['id'];
        $this->firstname = $row['firstname'];
        $this->lastname = $row['lastname'];
        $this->password = $row['password'];
        // return true because email exists in the database
        return true;
    }
    // return false if email does not exist in the database
    return false;
}
// update() method will be here