<div class="modalback">
    <div class="modal"
         id="linkupdateform"
         wire:mousedown.outside="$toggle('showEditForm')">
        <div class="adtr cursor-pointer"
             id="linkupdateformclosebtn"
             wire:click="$toggle('showEditForm')">
            <x-deco.icon icon="times" />
        </div>
        <div class="title">Edit Subcategory</div>
        <div class="fcols mt-6 w-full">
            <x-form.inputwire
                name="title"
                placeholder="Title"
                icon="name"
            />
            <x-form.inputwire
                name="position"
                placeholder="Position"
                type="number"
                icon="position"
            />
            <x-form.awiretag
                id="updatebtn"
                wireclick="updateSubcategory"
                icon="refresh"
                color="yellow"
                tag="Update"
            />
        </div>
    </div>
</div>
