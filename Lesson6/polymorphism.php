<?php
// Lớp cha Defender
class Defender {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Phương thức sẽ được override bởi các lớp con
    public function defend() {
        return $this->name . " đang phòng ngự chung chung";
    }
    
    // Phương thức overload (trong PHP dùng magic method __call)
    public function __call($method, $args) {
        if ($method == 'tackle') {
            $count = $args[0] ?? 1;
            return $this->name . " thực hiện " . $count . " pha tắc bóng\n";
        }
    }
}

// Lớp con Ramos
class Ramos extends Defender {
    // Override phương thức defend()
    public function defend() {
        return $this->name . " phòng ngự mạnh mẽ và quyết liệt";
    }
    
    // Phương thức riêng của Ramos
    public function header() {
        return $this->name . " đánh đầu rất giỏi";
    }
}

// Lớp con Maguire
class Maguire extends Defender {
    // Override phương thức defend()
    public function defend() {
        return $this->name . " phòng ngự chắc chắn nhưng đôi khi vụng về";
    }
}

// Lớp con VanDijk
class VanDijk extends Defender {
    // Override phương thức defend()
    public function defend() {
        return $this->name . " phòng ngự điềm tĩnh và kiểm soát tốt";
    }
}

// Sử dụng các lớp
$ramos = new Ramos("Ramos");
$maguire = new Maguire("Maguire");
$vandijk = new VanDijk("Van Dijk");

// Đa hình qua override
echo $ramos->defend() . "\n";
echo $maguire->defend() . "\n";
echo $vandijk->defend() . "\n";

// Đa hình qua overload (__call)
echo $ramos->tackle(3);
echo $maguire->tackle();
echo $vandijk->tackle(2);
?>