<?php
declare(strict_types=1);

namespace app\utilities;

use app\utilities\config\DB;

class Validate
{
    private $passed = false;
    private $errors = array();
    private $db = null;

    public function __construct() {
        $this->db = DB::getInstance();
    }

    public function check($method, $inputs = array()) {
        foreach ($inputs as $item => $rules) {
            foreach ($rules as $rule => $rule_value) {
                // echo "{$item} {$rule} must be {$rule_value}";
                $value = trim($method[$item]);
                $item = escape($item);

                if ($rule === 'required' && empty($value)) {
                    $this->addError("{$item} is required!");
                } else if (!empty($value)) {
                    switch ($rule) {
                        case 'min':
                            if (strlen($value) < $rule_value) {
                                $this->addError("{$item} must me greater than {$rule_value}!");
                            }
                            break;
                        case 'max':
                            break;
                        case 'unique':
                            break;
                        case 'matches':
                            break;
                    }
                }
            }
        }
        if (empty($this->errors)) {
            $this->passed = true;
        }
        return $this;
    }

    public function addError($errors): void 
    {
        $this->errors[] = $errors;
    }
}
