<form id="form_add_DebtorMaster" method="POST">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label class="text-uppercase">No. Debtor</label>
            <input type="text" class="form-control text-uppercase" name="debtorno" placeholder="No Debtor" maxlength="10" minlength="10" required>
        </div>
        <div class="form-group col-md-6">
            <label class="text-uppercase">NAME</label>
            <input type="text" class="form-control text-uppercase" name="name" placeholder="NAME" maxlength="40" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label  class="text-uppercase" >Address 1</label>
            <input type="text" class="form-control text-uppercase" name="address1" placeholder="Address 1" maxlength="40" required>
        </div>
        <div class="form-group col-md-6">
            <label  class="text-uppercase" >Address 2</label>
            <input type="text" class="form-control text-uppercase" name="address2" placeholder="Address 2" maxlength="40" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label  class="text-uppercase" >Address 3</label>
            <input type="text" class="form-control text-uppercase" name="address3" placeholder="Address 3" maxlength="40" required>
        </div>
        <div class="form-group col-md-6">
            <label  class="text-uppercase" >Address 4</label>
            <input type="text" class="form-control text-uppercase" name="address4" placeholder="Address 4" maxlength="50" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label  class="text-uppercase" >Address 5</label>
            <input type="text" class="form-control text-uppercase" name="address5" placeholder="Address 5" maxlength="20" required>
        </div>
        <div class="form-group col-md-6">
            <label  class="text-uppercase" >Address 6</label>
            <input type="text" class="form-control text-uppercase" name="address6" placeholder="Address 6" maxlength="15" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-10">
            <label  class="text-uppercase" >taxref</label>
            <input type="text" class="form-control text-uppercase" name="taxref"  maxlength="15" required>
        </div>
        <div class="form-group col-md-2">
            <label  class="text-uppercase">salesmancode</label>
            <select name="salesmancode" class="form-control text-uppercase" required>
            </select>
        </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="form-row">
            <div class="form-group col-md"></div>
            <div class="form-group col-md">
                <button id="btnSave" type="button" class="btn btn-primary btn-block">SAVE</button>
            </div>
            <div class="form-group col-md"></div>
        </div>

    
</form>