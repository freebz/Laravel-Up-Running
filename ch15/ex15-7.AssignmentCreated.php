// 예제 15-7 메일러블에 파일이나 데이터 첨부하기

// 로컬 파일명을 이용해서 파일 첨부
public function build()
{
    return $this->subject('백서 다운로드')
                ->attach(storage_path('pdfs/whitepaper.pdf'), [
                    'mime' => 'application/pdf', // 선택 사항
                    'as' => 'whitepaper-barasa.pdf', // 선택 사항
                ])
                ->view('emails.whitepaper');
}

// 원시 데이터를 전달해서 파일 첨부
public function build()
{
    return $this->subject('백서 다운로드')
                ->attachData(
                    file_get_contents(storage_path('pdfs/whitepaper.pdf')),
                    'whitepaper-barasa.pdf',
                    [
                        'mime' => 'application/pdf', // 선택 사항
                    ]
                )
                ->view('emails.whitepaper');
}

// S3 같은 파일 시스템 디스크에 저장된 파일 첨부
public function build()
{
    return $this->subject('백서 다운로드')
                ->view('emails.whitepaper')
                ->attachFromStorage('/pdfs/whitepaper.pdf');
}
