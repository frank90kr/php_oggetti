<?php

class Form
{
    // Array per memorizzare i campi del modulo
    private $fields = [];

    // Costruttore della classe Form
    public function __construct($method, $action)
    {
        // Aggiunta apertura tag del form
        $this->fields[] = "<form method='$method' action='$action'>";
    }

    // Aggiunta label al modulo
    public function addLabel($text, $for)
    {
        $this->fields[] = "<label for='$for'>$text</label>";
    }

    // Aggiunta input al modulo
    public function addInput($type, $name, $id)
    {
        $this->fields[] = "<input type='$type' name='$name' id='$id'>";
    }

    // Metodo per renderizzare il modulo
    public function render()
    {
        // Unisce tutti gli elementi dell'array fields in una stringa HTML completa
        return implode("<br>-", $this->fields) . "</form>";
    }
}
?>
