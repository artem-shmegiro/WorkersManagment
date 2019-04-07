<div class="form-group">
    <label>Наименование</label>
    <input type="text" class="form-control" name="title" placeholder="Наименование организации"
           value="{{ $organization->title ?? "" }}" required>
</div>
<div class="form-group">
    <label>ОГРН</label>
    <input type="number" class="form-control" name="OGRN" placeholder="ОГРН организации"
           value="{{ $organization->OGRN ?? "" }}" required>
</div>
<div class="form-group">
    <label>ОКТМО</label>
    <input type="number" class="form-control" name="OKTMO" placeholder="ОКТМО организации"
           value="{{ $organization->OKTMO ?? "" }}" required>
</div>
<input type="submit" class="btn btn-success" value="Сохранить">