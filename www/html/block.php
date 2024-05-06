<?php
 
class Block
{
    /**
     * 当前时间戳，也就是区块创建的时间
     * @var int $timestamp
     */
    public $timestamp;
 
    /**
     * 区块存储的信息，也就是交易
     * @var string $data
     */
    public $data;
 
    /**
     * 前一个块的哈希，即父哈希
     * @var string $prevBlockHash
     */
    public $prevBlockHash;
 
    /**
     * 当前块的哈希 
     * @var string $hash
     */
    public $hash;
 
    public function __construct(string $data, string $prevBlockHash)
    {
        $this->prevBlockHash = $prevBlockHash;
        $this->data = $data;
        $this->timestamp = time();
        $this->hash = $this->setHash();
    }
 
    public function setHash(): string
    {
        return hash('sha256', implode('', [$this->timestamp, $this->prevBlockHash, $this->data]));
    }
}