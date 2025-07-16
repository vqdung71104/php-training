<?php
class BankAccount {
    // Thuộc tính private - chỉ có thể truy cập từ bên trong class
    private $accountNumber;
    private $balance;

    // Constructor
    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Phương thức public để gửi tiền
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }

    // Phương thức public để rút tiền
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    // Phương thức public để xem số dư
    public function getBalance() {
        return $this->balance;
    }

    // Phương thức public để xem số tài khoản
    public function getAccountNumber() {
        return $this->accountNumber;
    }
}

// Sử dụng lớp BankAccount
$account = new BankAccount("123456789", 1000);

// Gửi tiền
$account->deposit(500);

// Rút tiền
$account->withdraw(200);

// Xem số dư
echo "Số dư tài khoản: " . $account->getBalance(); // Kết quả: 1300

// Không thể truy cập trực tiếp thuộc tính private
// $account->balance = 10000; // Lỗi!
?>