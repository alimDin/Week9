<?php
class UserDB {
    public static function getUsers() {
        $db = Database::getDB();
        $query = 'SELECT * FROM ad432.accounts
                  ORDER BY id';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $users = array();
        foreach ($statement as $row) {
            $user = new Category($row['id'],
                                     $row['email'],
                                     $row['fname'],
                                     $row['lname'],
                                     $row['phone'],
                                     $row['birthday']
                                     $row['gender']);
            $users[] = $user;
        }
        return $users;
    }

    public static function getUser($user_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM ad432.accounts
                  WHERE id = :user_id';    
        $statement = $db->prepare($query);
        $statement->bindValue(':user_id', $user_id);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $user = new Category($row['id'],
                                     $row['email'],
                                     $row['fname'],
                                     $row['lname'],
                                     $row['phone'],
                                     $row['birthday']
                                     $row['gender']);
        return $user;
    }

        public static function deleteUser($user_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM ad432.accounts
                  WHERE id = :user_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':puser_id', $user_id);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function addProduct($user) {
        $db = Database::getDB();

        $tid = $user->getUser()->getID();
        $temail = $user->getEmail();
        $tfname = $user->getFname();
        $tlname = $user->getLname();
        $tphone = $user->getPhone();
        $tbirthday = $user->getBirthday();
        $tgender = $user->gender();

        $query = 'INSERT INTO ad432.accounts
                     (id, email, fname, lname, phone, birthday, gender)
                  VALUES
                     (:tid, :temail, :tfname, :tlname, :tphone, :tbirthday, :tgender)';
        $statement = $db->prepare($query);
        $statement->bindValue(':tid', $tid;
        $statement->bindValue(':temail', $temail);
        $statement->bindValue(':tfname', $tfname);
        $statement->bindValue(':tlname', $tlname);
        $statement->bindValue(':tphone', $tphone);
        $statement->bindValue(':tbirthday', $tbirthday);
        $statement->bindValue(':tgender', $tgender);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>