// 예제 4-23 인라인 컴포넌트 클래스에서 템플릿 문법을 그대로 반환하는 방법

<!-- app/View/Components/Alert.php -->
...
public function render()
{
    return <<<'blade'
        <div class="alert alert-danger">
            {{ $slot }}
        </div>
    blade;
}
