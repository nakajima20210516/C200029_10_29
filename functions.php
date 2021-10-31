/* DB接続部分の関数化 */   
function db_conn() { 

    /* データベース定義 */ 

    define('DSN','mysql:host=localhost;dbname=lesson1;charset=utf8mb4'); 

    define('DB_USER','root'); 

    define('DB_PASS',''); 

    /* データベースに接続　*/ 

    try { 

        [データベース接続処理] 

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 

    } catch (PDOException $e){ 

        echo $e->getMessage(); 

        exit; 

    } 

    return $dbh; 

} 