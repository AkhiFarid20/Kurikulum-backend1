<?php

class Register {

    public static $name = 'farid',
                  $nik  = 'A001';

    public function __construct($name, $nik)
    {
        $this->nama = $name; $this->nik = $nik;
    }
}
$data = new Register("Apple", "red");
echo $data->$name();
echo "<br>";
echo $data->$nik();

class SantriBaru {

    public function __construct($name, $nik):void
    {
        $sql = "INSERT INTO MyGuests (name, nik)
        VALUES ('bintang', 'A002')";

    }
}
Register::set_prop($name, $nik);
class UpdateSantri {

    public function __construct($name, $nik)
    {
        $sql = "UPDATE MyGuests SET lastname='farid ra' WHERE id=A001";

    }
}
Register::set_prop($name, $nik);
class DeleteSantri {

    public function __construct($name, $nik)
    {
        $sql = "DELETE FROM MyGuests WHERE id=A002";
    }
}