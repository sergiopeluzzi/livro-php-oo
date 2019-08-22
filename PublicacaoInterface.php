<?php

interface PublicacaoInterface {
    public function abrir();
    public function fechar();
    public function folear($p);
    public function avancarPag();
    public function voltarPag();
} 