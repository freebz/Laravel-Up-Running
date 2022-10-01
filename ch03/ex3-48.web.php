// 예제 3-48 외부 서비스로부터의 스트리밍 다운로드

return response()->streamDownload(function () {
    echo DocumentService::file('myFile')->getContent();
}, 'myFile.pdf');
