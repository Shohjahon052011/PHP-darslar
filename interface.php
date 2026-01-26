<?php
interface Carinterface {
    public function haydash();
    public function tormozlash();
}
class Car implements Carinterface {
    public function haydash() {
        return "haydash";
    }
    public function tormozlash() {
        return "tormozlash";
    }
}
?>