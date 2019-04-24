<li class="list-group-item">
    <div class="form-group">
        <label>Фамилия</label>
        <input type="text" class="form-control" name="surname" placeholder="Фамилия"
               value="{{ $worker->surname ?? $xml->surname ?? "" }}" required>
    </div>
</li>
<li class="list-group-item">
    <div class="form-group">
        <label>Имя</label>
        <input type="text" class="form-control" name="name" placeholder="Имя"
               value="{{ $worker->name ?? $xml->name ?? "" }}" required>
    </div>
</li>
<li class="list-group-item">
    <div class="form-group">
        <label>Отчество</label>
        <input type="text" class="form-control" name="midname" placeholder="Отчество"
               value="{{ $worker->midname ?? $xml->midname ?? "" }}" required>
    </div>
</li>
<li class="list-group-item">
    <div class="form-group">
        <label>Дата рождения</label>
        <input type="date" class="form-control" name="birth" placeholder="Дата рождения"
               value="{{ $worker->birth ?? $xml->birthday ?? "" }}" required>
    </div>
</li>
<li class="list-group-item">
    <div class="form-group">
        <label>ИНН</label>
        <input type="number" class="form-control" name="INN" placeholder="ИНН сотрудника"
               value="{{ $worker->INN ?? $xml->INN ?? "" }}" required>
    </div>
</li>
<li class="list-group-item">
    <div class="form-group">
        <label>СНИЛС</label>
        <input type="number" class="form-control" name="SNILS" placeholder="СНИЛС сотрудника"
               value="{{ $worker->SNILS ?? $xml->SNILS ?? "" }}" required>
    </div>
</li>
<li class="list-group-item">
    <input type="submit" class="btn btn-success btn-block" value="Сохранить">
</li>