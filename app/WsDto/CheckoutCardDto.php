<?php

namespace App\WsDto;

class CheckoutCardDto {

        public $card_number;
        public $month_year;
        public $cvc;

        public function __construct($card_number, $month_year, $cvc)
        {
            $this->card_number = $card_number;
            $this->month_year = $month_year;
            $this->cvc = $cvc;
        }

        public static function fromModel($user){
            return new self(
                $user->card_number,
                $user->month_year,
                $user->cvc
            );
        }
        public function getMonth(): string
        {
            return substr(explode("/", $this->month_year)[0],0,2);
        }
        public function getYear(): string
        {
            return substr(explode("/", $this->month_year)[1],0,2);
        }

        public function getCardNumber(): string{
            return $this->card_number;
        }
        public function getCardCvc(): string{
            return $this->cvc;
        }
        public function toArray(){
            return [
                "card_number" => $this->card_number,
                "month_year" => $this->month_year,
                "cvc" => $this->cvc
            ];
        }
}
