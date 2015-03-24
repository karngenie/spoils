<?php namespace Lib\Gestion;

interface CardSearchGestionInterface {

    public function initLists();
    public function resultSearch($q);
    public function getCard($number);

}