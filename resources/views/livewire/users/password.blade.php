<div class="modalback bg-opacity-10">
    <x-form.header :href="route('home')" />
    <div class="modal">
        <div class="title mb-7">Change Password</div>
        <form
            id="passchangeform"
            class="fcols mt-6 w-full"
            wire:submit="updatePass"
        >
            <x-form.inputwire
                name="password"
                placeholder="New Password"
                autocomplete="current-password"
                icon="pass"
                type="password"
            />
            <x-form.inputwire
                name="confirm"
                placeholder="Confirm Password"
                autocomplete="new-password"
                icon="pass"
                type="password"
            />
            <x-form.sbtn
                id="updatebtn"
                form="passchangeform"
                icon="refresh"
                color="yellow"
                tag="Update"
            />
        </form>
    </div>
</div>
