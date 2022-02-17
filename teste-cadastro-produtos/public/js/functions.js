var num = 1;

function newTag() {
    num++
    const div = document.getElementById('newTag');
    const tag = `<label for="tags" class="form-label">Tags</label>
                    <input class="form-control" list="tagsOptions" id="tags" name="tag[]" placeholder="Type to search..." multiple>
                    <datalist class="" id="tagsOptions">
                    </datalist>`
    
    div.innerHTML += tag;

    console.log(num)
}