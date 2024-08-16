<div class="modalback">
    <div class="modal"
         id="categorycreateform"
         wire:mousedown.outside="$toggle('showCreateForm')">
        <div class="adtr cursor-pointer"
             id="linkcreateformclosebtn"
             wire:click="$toggle('showCreateForm')">
            <x-deco.icon icon="times" />
        </div>
        <div class="title">New Category</div>
        <div class="fcols mt-6 w-full">
            <x-form.inputwire
                name="title"
                placeholder="Title"
                icon="name"
            />
            <x-form.awiretag
                id="createbtn"
                wireclick="createCategory"
                icon="add"
                color="green"
                tag="Create"
            />
        </div>
    </div>
</div>
