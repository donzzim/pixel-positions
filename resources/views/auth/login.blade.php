<x-layout>
    <x-page-heading>
        Log In
    </x-page-heading>

    <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

        <x-form.button>
            Log In
        </x-form.button>
</x-layout>
