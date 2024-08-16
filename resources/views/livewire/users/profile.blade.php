<div class="modalback bg-opacity-10">
    <x-form.header :href="route('home')" />
    <div class="modal">
        <div class="title mb-7">
            Update Info
        </div>
        <form wire:submit="updateUser"
              id="updateprofileform">
            @csrf
            <x-form.inputwire
                name="name"
                placeholder="Name"
                :value="old('name')"
                autocomplete="name"
                icon="name"
                autofocus="autofocus"
            />
            <x-form.inputwire
                name="email"
                placeholder="Email"
                :value="old('email')"
                autocomplete="email"
                type="email"
                icon="mail"
            />
            <x-form.sbtn
                id="updatebtn"
                form="updateprofileform"
                icon="refresh"
                color="theme"
                tag="Update" />
        </form>
    </div>
    <x-app.offline />
</div>

