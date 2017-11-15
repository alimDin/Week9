<?php
class UserObject {
    private $id;
    private $email;
    private $fname;
    private $lname;
    private $phone;
    private $birthday;
    private $gender;
    public function __construct($id, $email, $fname, $lname, $phone, $birthday, $gender) 
    {
        $this->id = $id;
        $this->name = $email;
        $this->first = $fname;
        $this->last = $lname;
        $this->phone = $phone;
        $this->birthday = $birthday;
        $this->gender = $gender;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($value) {
        $this->email = $value;
    }

    public function getFName() {
        return $this->first;
    }

    public function setFName($value) {
        $this->last = $value;
    }
    public function getLName() {
        return $this->last;
    }

    public function setLName($value) {
        $this->last = $value;
    }
    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($value) {
        $this->phone = $value;
    }
    public function getBirthday() {
        return $this->birthday;
    }

    public function setBirthday($value) {
        $this->birthday = $value;
    }
    public function getGender() {
        return $this->gender;
    }

    public function setGender($value) {
        $this->gender = $value;
    }

}
?>