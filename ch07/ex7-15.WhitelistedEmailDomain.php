// 예제 7-15 커스텀 Rule 객체

// 이 클래스는 입력받은 이메일이 화이트리스트에 해당하는 'tighten.co' 메일인지
// 확인한다.
class WhitelistedEmailDomain implements Rule
{
    public function passes($attribute, $value)
    {
        return in_array(Str::after($value, '@'), ['tighten.co']);
    }

    public function message()
    {
        return 'The :attribute field is not a whitelisted email provider.';
    }
}
