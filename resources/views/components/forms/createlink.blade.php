<div class="modalback">
    <div class="modal"
         id="linkcreateform"
         wire:mousedown.outside="$toggle('showCreateForm')">
        <div class="adtr cursor-pointer"
             id="linkcreateformclosebtn"
             wire:click="$toggle('showCreateForm')">
            <x-deco.icon icon="times" />
        </div>
        <div class="title">New Link</div>
        <div class="fcols mt-6 w-full">
            <div class="frowb gap-4">
                <div class="w-full">
                    <x-form.inputwire
                        name="title"
                        placeholder="Title"
                        icon="name"
                    />
                    <x-form.inputwire
                        name="href"
                        placeholder="href"
                        icon="link"
                    />
                </div>
                <div class="w-40">
                    <x-form.uploadpic
                        :src="$newlink->image"
                        wiretarget="createlink"
                        :$pic
                    />
                </div>
            </div>
            <x-form.awiretag
                id="createbtn"
                wireclick="createLink"
                icon="add"
                color="green"
                tag="Create"
            />
        </div>
    </div>
</div>
