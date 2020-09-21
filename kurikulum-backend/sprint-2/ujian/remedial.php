 <?php 

class Pendaftaran {

    public static $murid[

        [
            'nik' => "A001",
            'name' => "Farid",
            'age' => "18",
        ],

        [
            'nik' => "A002",
            'name' => "Rizqy",
            'age' => "19"
        ],

        [
            'nik' => "A003",
            'name' => "Areva",
            'age' => "20"
        ]
    ]

     public function insertSantri() {
         echo "\nInsert Santri Baru 2020\n";
         echo "========================="."\n";

        echo "Input Nik ";
        $nik  = trim(fgetc(STDIN));
        echo "Input name";
        $name = trim(fgetc(STDIN));
        echo "Input age";
        $age = trim(fgetc(STDIN));

        $index = count(self::$murid);

        self::$murid[$index][$nik] = 'nik';
        self::$murid[$index][$name] = 'name';
        self::$murid[$index][$age] = 'age';

        print_r(self::$murid);
     }
}

class Proses extends Pendaftaran {

    public function __construct($program)
    {
        if($program == "UPDATE") {
            $this->updateSantri();
        }elseif($program == "DELETE"){
            $this->deleteSantri();
        }
    }

    public function updateSantri() {

        echo "\nNgubah Data Santri Baru 2020\n";
        echo "=============================="."\n";

        echo "Update Data Santri";
        print_r(parent::$murid);
        $data = parent::$murid;

        echo "Inputkan NIK Data Yang Ingin DiUbah : ";
            $Nik = trim(fgets(STDIN));
            foreach($data as $Key => $Values) {
                if($data[$Key]['Nik'] == $Nik) {
                    echo "Input Name Yang Baru : ";
                    $Data[$Key]['Name'] = trim(fgets(STDIN));
                    echo "Input Age Yang Baru : ";
                    $Data[$Key]['Age'] = trim(fgets(STDIN));
                }
            }      
    }

    public function deleteSantriBaru() {

        echo "\nNgubah Data Santri Baru 2020\n";
        echo "=============================="."\n";

        echo "Update Data Santri";
        print_r(parent::$murid);
        $data = parent::$murid;

        echo "Inputkan NIK Data Yang Ingin DiUbah : ";
            $Nik = trim(fgets(STDIN));
            foreach($data as $Key => $Values) {
                if($data[$Key]['Nik'] == $Nik) {
                    unset($data[$Key]);
                }
            }

            
    }
}
?>