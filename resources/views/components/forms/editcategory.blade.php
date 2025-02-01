<div class="modalback">
    <div class="modal"
         id="categoryupdateform"
         wire:mousedown.outside="$toggle('showEditForm')">
        <div class="adtr cursor-pointer"
             id="linkupdateformclosebtn"
             wire:click="$toggle('showEditForm')">
            <x-deco.icon icon="times" />
        </div>
        <div class="title">Edit Category</div>
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
                wireclick="updateCategory"
                icon="add"
                color="green"
                tag="Update"
            />
        </div>
    </div>
</div>
