class InvitationController
{
    public function __invoke(Invitation $invitation, $group, Request $request)
    {
        if (! $request->hasValidSignature()) {
            abort(403);
        }

        //
    }
}