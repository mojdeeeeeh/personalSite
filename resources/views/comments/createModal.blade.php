 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add comment</h4>
            </div>

            <div class="modal-body">

                <form id="app" action='{{ url("cards/$card->id/comments") }}'  method="post" class="row">
                    {{ csrf_field()  }}

                    <div class="form-group">
                        <label for="cmBody">comment</label>
                        <div>
                            <input type="text" id="cmBody" name="cmBody" class="form-control" v-model="cmBody">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cmName">Name</label>
                        <div>
                            <input type="text" id="cmName" name="cmtName" class="form-control" v-model="cmName">
                        </div>
                    </div>

                   <div class="form-group col-md-6">
                        <label for="cmEmail">Email</label>
                        <div>
                            <input type="text" id="cmEmail" name="cmEmail" class="form-control" v-model="cmEmail">
                        </div>
                    </div>

                    <div class="col-md-offset-4">
                        <input type="submit" value="Send" @click.prevent="sendData" class="btn btn-primary ">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
