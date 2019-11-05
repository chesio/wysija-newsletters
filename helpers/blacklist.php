<?php

class Blacklist {
  const SALT = 'mailpoet';

  private $email_blacklist = array(
    'e60c6e0e73997c92d4ceac78a6b6cbbe6249244c4106a3c31de421fc50370ecd' => 1,
    '4a7fb8fba0a800ad5cf324704d3510d019586765aef6d5081fa5aed3f93d9dce' => 1,
    '7151c278028263ace958b66616e69a438f23e5058a5df42ed734e9e6704f8332' => 1,
  );

  private $domain_blacklist = array(
    '2ea570cf0c440b2ec7d6e1335108625a5f62162b2116a25c9c909dc5b54c213f' => 1,
    '1e10eb32b615217baa4d8f54191891e107851a2057d1128f067f1df096896e45' => 1,
    'dc2bfb04e38d3c25c8a465a5fed841a1cb1685044d12241efe01f0fc044f2182' => 1,
    'f17c13fe5a1d8cd2e78a04528377cc607881ad12b6295b6fa8b6a789d1d04c10' => 1,
    '813cbef72da3542e783470ecd62589bceb3883d15ab2435ec2486f9762602b8c' => 1,
  );

  public function isBlacklisted($email) {
    $hashed_email = $this->hash($email);
    if (isset($this->email_blacklist[$hashed_email])) {
      return true;
    }
    $email_parts = explode('@', $email);
    $domain = end($email_parts);
    $hashed_domain = $this->hash($domain);
    return isset($this->domain_blacklist[$hashed_domain]);
  }

  public function hash($email) {
    return hash('sha256', $email . self::SALT);
  }
}
