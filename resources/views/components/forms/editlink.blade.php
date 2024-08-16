<div class="modalback">
    <div class="modal"
         id="linkcreateform"
         wire:mousedown.outside="$toggle('showEditForm')">
        <div class="adtr cursor-pointer"
             id="linkcreateformclosebtn"
             wire:click="$toggle('showEditForm')">
            <x-deco.icon icon="times" />
        </div>
        <div class="title">Edit Link</div>
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
            <div class="frowb gap-4">
                <x-form.awiretag
                    id="updatebtn"
                    wireclick="updateLink"
                    icon="refresh"
                    color="yellow"
                    tag="Update"
                />
                <x-form.awiretag
                    id="deletebtn"
                    wireclick="deleteLink"
                    icon="trash"
                    color="red"
                    tag="Delete"
                />
            </div>
        </div>
    </div>
</div>
