<?php

class Compra
{
    private $venda;
    private $faturamento;
    private $remessa;

    public function __construct(VendaInterface $venda, FaturamentoInterface $faturamento, RemessaInterface $remessa)
    {
        $this->venda = $venda;
        $this->faturamento = $faturamento;
        $this->remessa = $remessa;
    }

    public function finalizar()
    {
        $this->faturamento->integracaoCartaoCredito();
        $this->venda->setStatus($this->faturamento->getStatus());

        if ($this->venda->isOK()) {
            $this->remessa->addParaEntrega($this->venda);
        }
    }
}


//usando

$compra = new Compra($venda, $faturamento, $remessa);
$compra->finalizar();