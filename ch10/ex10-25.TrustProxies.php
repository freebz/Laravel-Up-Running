// 예제 10-25 TrustProxies 미들웨어 설정하기

/**
 * 신뢰할 수 있는 프록시
 *
 * @var array
 */
protected $proxies = [
    '192.168.1.1',
    '192.168.1.2',
];

/**
 * 프록시를 감지하는 데 사용하는 헤더
 *
 * @var string
 */
protected $headers = Request::HEADER_X_FORWARDED_ALL;
