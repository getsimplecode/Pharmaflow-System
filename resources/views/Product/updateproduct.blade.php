<div class="modal fade" id="updateproductModal" tabindex="-1" aria-labelledby="updateproductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateproductModalLabel">
                    <strong style="color: green;">Update Product Information</strong>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="genericname" class="form-label">Generic Name</label>
                        <input type="text" class="form-control" id="genericname" placeholder="Input here">
                    </div>
                    <div class="col-md-6">
                        <label for="brandname" class="form-label">Brand Name</label>
                        <input type="text" class="form-control" id="brandname" placeholder="Input here">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" onchange="showSubcategories()">
                            <option selected disabled>Select a category</option>
                            <option value="tablets">Tablets</option>
                            <option value="syrups">Syrups</option>
                            <option value="creams">Creams</option>
                            <option value="injections">Injections</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6" id="subcategories-container" style="display:none;">
                        <label for="subcategory" class="form-label">Subcategory</label>
                        <select class="form-select" id="subcategory">

                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="dosagestrenght" class="form-label">Dosage Strength</label>
                        <input type="text" class="form-control" id="dosagestrenght" placeholder="Input here">
                    </div>
                    <div class="col-md-3">
                        <label for="unitmeasurement" class="form-label">Unit Measurement</label>
                        <input type="text" class="form-control" id="unitmeasurement" placeholder="Input here">
                    </div>
                    <div class="col-md-6">
                        <label for="unitmeasurement" class="form-label">Reorder Quantity</label>
                        <input type="text" class="form-control" id="unitmeasurement" placeholder="Input here">
                    </div>
                    <div class="col-md-6">
                        <label for="category" class="form-label">Prescription Required</label>
                        <select class="form-select">
                            <option selected disabled>Select a category</option>
                            <option value="tablets">Required</option>
                            <option value="syrups">Unrequired</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Barcode</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="comment">Description</label>
                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Update Details</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showSubcategories() {
        const category = document.getElementById("category").value;
        const subcategoriesContainer = document.getElementById("subcategories-container");
        const subcategorySelect = document.getElementById("subcategory");


        subcategorySelect.innerHTML = "";


        if (category === "tablets") {
            subcategoriesContainer.style.display = "block";
            subcategorySelect.innerHTML += `<option value="painRelief">Pain Relief</option>`;
            subcategorySelect.innerHTML += `<option value="antibiotics">Antibiotics</option>`;
            subcategorySelect.innerHTML += `<option value="vitamins">Vitamins</option>`;
        } else if (category === "syrups") {
            subcategoriesContainer.style.display = "block";
            subcategorySelect.innerHTML += `<option value="coughSyrups">Cough Syrups</option>`;
            subcategorySelect.innerHTML += `<option value="antacidSyrups">Antacid Syrups</option>`;
        } else if (category === "creams") {
            subcategoriesContainer.style.display = "block";
            subcategorySelect.innerHTML += `<option value="antiFungal">Anti-fungal Creams</option>`;
            subcategorySelect.innerHTML += `<option value="moisturizers">Moisturizers</option>`;
        } else if (category === "injections") {
            subcategoriesContainer.style.display = "block";
            subcategorySelect.innerHTML += `<option value="antibioticInjections">Antibiotic Injections</option>`;
            subcategorySelect.innerHTML += `<option value="vaccines">Vaccines</option>`;
        } else {
            subcategoriesContainer.style.display = "none";
        }
    }
</script>