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

    /**
    * 
    * check method - Checks for correct input
    * 
    * @param string $method - String name of method
    * @param array $inputs - Array that contain validation rules
    *
    * @return Validate
    */
    public function check($method, $inputs = array()): Validate
    {
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
                            if (strlen($value) > $rule_value) {
                                $this->addError("{$item} must me less than {$rule_value}!");
                            }
                            break;
                        case 'unique':
                            $query = $this->db->get($rule_value, array($item, '=', $value));
                            if ($query->count()) {
                                $this->addError("Username <span class='fw-bold'>`{$value}`</span> is already taken!");
                            }
                            break;
                        case 'matches':
                            if ($value != $method[$rule_value]) {
                                $this->addError("{$rule_value} must match {$item}");
                            }
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

    /**
    *
    * addError method - Responsible for adding errors in array
    * 
    * @param array $errors - Array values of errors
    *
    * @return void
    */
    public function addError($errors): void 
    {
        $this->errors[] = $errors;
    }

    public function errors(): array
    {
        return $this->errors;
    }

    public function passed(): bool
    {
        return $this->passed;
    }
}
