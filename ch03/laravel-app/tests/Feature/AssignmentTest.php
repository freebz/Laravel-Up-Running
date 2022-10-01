class AssignmentTest extends TestCase
{
    public function test_post_creates_new_assigment()
    {
        $this->post('/assignments', [
            'title' => 'My great assignment',
        ]);

        $this->assertDatabaseHas('assigments', [
            'title' => 'My great assignment',
        ]);
    }

    public function test_list_page_shows_all_assignment()
    {
        $assignment = Assignment::create([
            'title' => 'My great assigment',
        ]);

        $this->get('/assigments')
            ->assertSee('My great assigment');
    }
}