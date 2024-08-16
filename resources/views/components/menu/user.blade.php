<div class="group relative p-2 print:hidden">
    <img
        class="w-12 cursor-pointer rounded-full shadow"
        src="{{ cusr()->image }}"
        alt="">
    <div class="menudiv top-1 right-1">
        <x-form.ahreftag
            icon="user"
            tag="Profile"
            :href="route('users.profile')"
            width="w-full"/>
        <x-form.ahreftag
            icon="pass"
            tag="Change Pass"
            :href="route('users.password')"
            width="w-full"/>
        <form
            class="w-full"
            id="logoutform"
            action="{{ route('logout') }}"
            method="POST">
            @csrf
            <x-form.sbtn
                form="logoutform"
                icon="logout"
                tag="Logout"
                width="w-full hover:bg-red-400"/>
        </form>
    </div>
</div>
