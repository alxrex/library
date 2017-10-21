<form class="form-horizontal col-lg-8 col-md-8 col-sm-10">
  
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Name" ng-model="book.name">
    </div>
  </div>

  <div class="form-group">
    <label for="author" class="col-sm-2 control-label">Author</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="author" placeholder="Author" ng-model="book.author">
    </div>
  </div>


  <div class="form-group">
    <label for="published_date" class="col-sm-2 control-label">Category</label>
      <div class="col-sm-10">

        <ui-select ng-model="c.selected"
                  theme="bootstrap"
                  ng-disabled="undefined"
                  reset-search-input="false"
                  refresh-delay="500"
                  on-select="setCategorySelected($item, $model)"
                  >
          <ui-select-match placeholder="Type Category...">@{{$select.selected.name +' '+$select.selected.description}}</ui-select-match>
          <ui-select-choices repeat="c in categories"
                   refresh="searchCategories($select.search)"
                   refresh-delay="100">
            <div ng-bind-html="c.name+' '+c.description | highlight: $select.search"></div>
          </ui-select-choices>
        </ui-select>

      </div>
    </div>

  <div class="form-group">
    <label for="published_date" class="col-sm-2 control-label">Published date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="published_date" placeholder="Published date" ng-model="book.published_date">
    </div>
  </div>

  <div class="form-group">
    <label for="user" class="col-sm-2 control-label">User</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="User" ng-model="book.user">
    </div>
  </div>

  <div class="alert alert-danger" role="alert" ng-if="status=='error'">@{{mensaje}}</div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary col-lg-3 col-md-4 col-sm-5" ng-click="save();" >Save</button>
    </div>
  </div>
  
</form>
<style>
.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){ text-align: left; }
</style>