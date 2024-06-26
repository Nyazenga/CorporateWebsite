<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class="container mt-5">
                <h1><strong>Home Section</strong></h1>
                <table class="table mt-2 table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homes as $home)
                            <tr>
                                <td>{{ $home->title }}</td>
                                <td>{{ $home->description }}</td>

                                <td><img src="{{ asset($home->picture) }}" alt="Home Picture" class="img-thumbnail mt-2"
                                        width="300">
                                </td>
                                <td>
                                    <button id="edit-home-btn" class="btn btn-primary edit-btn"
                                        data-title="{{ $home->title }}" data-description="{{ $home->description }}"
                                        data-picture="{{ $home->picture }}" data-id="{{ $home->id }}">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="container mt-5">
                <h1><strong>About Section</strong></h1>
                <table class="table mt-2 table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>Heading Title</th>
                            <th>Heading Description</th>
                            <th>Who We Are</th>
                            <th>Our Vision</th>
                            <th>Our History</th>
                            <th>Picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{{ $about->heading_title }}</td>
                                <td>{{ $about->heading_description }}</td>
                                <td>{{ $about->who_we_are }}</td>
                                <td>{{ $about->our_vision }}</td>
                                <td>{{ $about->our_history }}</td>
                                <td><img src="{{ asset($about->picture) }}" alt="About Picture"
                                        class="img-thumbnail mt-2" width="300">
                                </td>
                                <td>
                                    <button id="edit-about-btn" class="btn btn-primary edit-btn"
                                        data-heading_title="{{ $about->heading_title }}"
                                        data-heading_description="{{ $about->heading_description }}"
                                        data-who_we_are="{{ $about->who_we_are }}"
                                        data-our_vision="{{ $about->our_vision }}"
                                        data-our_history="{{ $about->our_history }}" data-picture="{{ $about->picture }}" data-id="{{ $about->id }}">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="container mt-5">

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1><strong>Services Section</strong></h1>
                            <button class="btn btn-primary add-services-btn" data-toggle="modal"
                                data-target="#addServiceModal">Add Service</button>
                        </div>
                    </div>
                </div>



                <table class="table mt-2 table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <button id="edit-services-btn-{{ $service->id }}" class="btn btn-primary edit-btn"
                                        data-title="{{ $service->title }}"
                                        data-description="{{ $service->description }}" data-id="{{ $service->id }}">
                                        Edit
                                    </button>

                                    <button class="btn btn-danger delete-service-btn"
                                        data-id="{{ $service->id }}">Delete</button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="container mt-5">

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1><strong>Pricing Section</strong></h1>
                            <button class="btn btn-primary add-pricing-btn" data-toggle="modal"
                                data-target="#addPricingModal">Add Pricing</button>
                        </div>
                    </div>
                </div>
                <table class="table mt-2 table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>Plan Title</th>
                            <th>Plan Description</th>
                            <th>Plan Price</th>
                            <th>Plan Features</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pricings as $pricing)
                            <tr>
                                <td>{{ $pricing->plan_title }}</td>
                                <td>{{ $pricing->plan_description }}</td>
                                <td>{{ $pricing->plan_price }}</td>
                                <td>
                                    <ul class="table-list">
                                        <li> <i class="lni lni-checkmark-circle"></i> {{ $pricing->plan_feature_1 }}
                                        </li>
                                        <li> <i class="lni lni-checkmark-circle"></i> {{ $pricing->plan_feature_2 }}
                                        </li>
                                        <li> <i class="lni lni-checkmark-circle"></i> {{ $pricing->plan_feature_3 }}
                                        </li>
                                        <li> <i class="lni lni-checkmark-circle"></i> {{ $pricing->plan_feature_4 }}
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button id="edit-pricings-btn-{{ $pricing->id }}" class="btn btn-primary edit-btn"
                                        data-plan_title="{{ $pricing->plan_title }}"
                                        data-plan_description="{{ $pricing->plan_description }}"
                                        data-plan_price="{{ $pricing->plan_price }}"
                                        data-plan_feature_1="{{ $pricing->plan_feature_1 }}"
                                        data-plan_feature_2="{{ $pricing->plan_feature_2 }}"
                                        data-plan_feature_3="{{ $pricing->plan_feature_3 }}"
                                        data-plan_feature_4="{{ $pricing->plan_feature_4 }}"
                                        data-id="{{ $pricing->id }}">
                                        Edit
                                    </button>
                                    <button class="btn btn-danger delete-pricing-btn"
                                        data-id="{{ $pricing->id }}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="container mt-5">
                <h1><strong>Footer Section</strong></h1>
                <table class="table mt-2 table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($footers as $footer)
                            <tr>
                                <td>{{ $footer->title }}</td>
                                <td>{{ $footer->description }}</td>
                                <td>
                                    <button id="edit-footer-btn" class="btn btn-primary edit-btn"
                                        data-title="{{ $footer->title }}"
                                        data-description="{{ $footer->description }}" data-id="{{ $service->id }}">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-slot>

    <!-- Add Service Modal -->
    <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="addServiceModalLabel">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addServiceForm" action="{{ route('services.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="serviceTitle">Title</label>
                            <input type="text" class="form-control" id="serviceTitle" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="serviceDescription">Description</label>
                            <textarea class="form-control" id="serviceDescription" name="description" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Add Pricing Modal -->
    <div class="modal fade" id="addPricingModal" tabindex="-1" role="dialog"
        aria-labelledby="addPricingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="addPricingModalLabel">Add Pricing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addPricingForm" action="{{ route('pricing.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="pricingTitle">Plan Title</label>
                            <input type="text" class="form-control" id="pricingTitle" name="plan_title" required>
                        </div>
                        <div class="form-group">
                            <label for="pricingDescription">Plan Description</label>
                            <textarea class="form-control" id="pricingDescription" name="plan_description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pricingPrice">Plan Price</label>
                            <input type="text" class="form-control" id="pricingPrice" name="plan_price" required>
                        </div>
                        <div class="form-group">
                            <label for="pricingFeature1">Plan Feature 1</label>
                            <input type="text" class="form-control" id="pricingFeature1" name="plan_feature_1">
                        </div>
                        <div class="form-group">
                            <label for="pricingFeature2">Plan Feature 2</label>
                            <input type="text" class="form-control" id="pricingFeature2" name="plan_feature_2">
                        </div>
                        <div class="form-group">
                            <label for="pricingFeature3">Plan Feature 3</label>
                            <input type="text" class="form-control" id="pricingFeature3" name="plan_feature_3">
                        </div>
                        <div class="form-group">
                            <label for="pricingFeature4">Plan Feature 4</label>
                            <input type="text" class="form-control" id="pricingFeature4" name="plan_feature_4">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Pricing</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Home Section Edit Modal -->
    <div class="modal fade" id="editHomeModal" tabindex="-1" role="dialog" aria-labelledby="editHomeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="editHomeModalLabel">Edit Home Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form inputs for editing home section -->
                    <form id="editHomeForm" action="{{ route('home.update', ['home' => $home->id]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updating -->
                        <!-- Input fields here -->
                        <input type="hidden" id="homeId" name="homeId">
                        <div class="form-group">
                            <label for="editTitle">Title</label>
                            <input type="text" class="form-control" id="editTitle" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="editDescription">Description</label>
                            <textarea class="form-control" id="editDescription" name="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editPicture">Picture (PNG, JPG, JPEG, AVIF, WEBP)</label>
                            <input type="file" class="form-control-file" id="editPicture" name="picture"
                                accept=".png, .jpg, .jpeg, .avif, .webp">
                        </div>
                        <img id="pictureThumbnail" src="" alt="No Picture" class="img-thumbnail mt-2"
                            width="100">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- About Section Edit Modal -->
    <div class="modal fade" id="editAboutModal" tabindex="-1" role="dialog" aria-labelledby="editAboutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="editAboutModalLabel">Edit About Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form inputs for editing about section -->
                    <form id="editAboutForm" action="{{ route('about.update', ['about' => $about->id]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updating -->
                        <!-- Input fields here -->
                        <input type="hidden" id="aboutId" name="aboutId">
                        <div class="form-group">
                            <label for="editHeadingTitle">Heading Title</label>
                            <input type="text" class="form-control" id="editHeadingTitle" name="heading_title"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editHeadingDescription">Heading Description</label>
                            <textarea class="form-control" id="editHeadingDescription" name="heading_description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editWhoWeAre">Who We Are</label>
                            <input type="text" class="form-control" id="editWhoWeAre" name="who_we_are" required>
                        </div>
                        <div class="form-group">
                            <label for="editOurVision">Our Vision</label>
                            <textarea class="form-control" id="editOurVision" name="our_vision" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editOurHistory">Our History</label>
                            <textarea class="form-control" id="editOurHistory" name="our_history" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editPicture">Picture (PNG, JPG, JPEG, AVIF, WEBP)</label>
                            <input type="file" class="form-control-file" id="editPicture" name="picture"
                                accept=".png, .jpg, .jpeg, .avif, .webp">
                        </div>
                        <img id="pictureThumbnail2" src="" alt="No Picture" class="img-thumbnail mt-2"
                            width="100">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Services Section Edit Modal -->
    <div class="modal fade" id="editServicesModal" tabindex="-1" role="dialog"
        aria-labelledby="editServicesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="editServicesModalLabel">Edit Services Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form inputs for editing services section -->
                    <form id="editServicesForm" action="{{ route('services.update', ['service' => $service->id]) }}"
                        method="POST">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updating -->
                        <!-- Input fields here -->
                        <input type="hidden" id="servicesId" name="servicesId">
                        <div class="form-group">
                            <label for="editServicesTitle">Title</label>
                            <input type="text" class="form-control" id="editServicesTitle" name="title"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editServicesDescription">Description</label>
                            <textarea class="form-control" id="editServicesDescription" name="description" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Pricing Section Edit Modal -->
    <div class="modal fade" id="editPricingModal" tabindex="-1" role="dialog"
        aria-labelledby="editPricingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="editPricingModalLabel">Edit Pricing Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form inputs for editing pricing section -->
                    <form id="editPricingForm" action="{{ route('pricing.update', ['pricing' => $pricing->id]) }}"
                        method="POST">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updating -->
                        <!-- Input fields here -->
                        <input type="hidden" id="pricingId" name="pricingId">
                        <div class="form-group">
                            <label for="editPlanTitle">Plan Title</label>
                            <input type="text" class="form-control" id="editPlanTitle" name="plan_title"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editPlanDescription">Plan Description</label>
                            <textarea class="form-control" id="editPlanDescription" name="plan_description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editPlanPrice">Plan Price</label>
                            <input type="number" class="form-control" id="editPlanPrice" name="plan_price"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editPlanFeature1">Plan Feature 1</label>
                            <input type="text" class="form-control" id="editPlanFeature1" name="plan_feature_1"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editPlanFeature2">Plan Feature 2</label>
                            <input type="text" class="form-control" id="editPlanFeature2" name="plan_feature_2"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editPlanFeature3">Plan Feature 3</label>
                            <input type="text" class="form-control" id="editPlanFeature3" name="plan_feature_3"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="editPlanFeature4">Plan Feature 4</label>
                            <input type="text" class="form-control" id="editPlanFeature4" name="plan_feature_4"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section Edit Modal -->
    <div class="modal fade" id="editFooterModal" tabindex="-1" role="dialog"
        aria-labelledby="editFooterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="editFooterModalLabel">Edit Footer Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form inputs for editing footer section -->
                    <form id="editFooterForm" action="{{ route('footer.update', ['footer' => $footer->id]) }}"
                        method="POST">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updating -->
                        <!-- Input fields here -->
                        <input type="hidden" id="footerId" name="footerId">
                        <div class="form-group">
                            <label for="editFooterTitle">Title</label>
                            <input type="text" class="form-control" id="editFooterTitle" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="editFooterDescription">Description</label>
                            <textarea class="form-control" id="editFooterDescription" name="description" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-service-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const serviceId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Proceed with form submission
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.action = `/services/${serviceId}`;
                        form.innerHTML = `
                            @csrf
                            @method('DELETE')
                        `;
                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-pricing-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const pricingId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Proceed with form submission
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.action = `/pricings/${pricingId}`;
                        form.innerHTML = `
                            @csrf
                            @method('DELETE')
                        `;
                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Call the populateHomeModal function with appropriate data
        $('#edit-home-btn').click(function() {
            var id = $(this).data('id');
            var title = $(this).data('title');
            var description = $(this).data('description');
            var picture = $(this).data('picture');
            populateHomeModal(id, title, description, picture);
        });

        // Call the populateAboutModal function with appropriate data
        $('#edit-about-btn').click(function() {
            var id = $(this).data('id');
            var headingTitle = $(this).data('heading_title');
            var headingDescription = $(this).data('heading_description');
            var whoWeAre = $(this).data('who_we_are');
            var ourVision = $(this).data('our_vision');
            var ourHistory = $(this).data('our_history');
            var picture = $(this).data('picture');
            populateAboutModal(id, headingTitle, headingDescription, whoWeAre, ourVision, ourHistory, picture);
        });


        // Call the populateServicesModal function with appropriate data
        $('[id^=edit-services-btn-]').click(function() {
            var id = $(this).data('id');
            var title = $(this).data('title');
            var description = $(this).data('description');
            populateServicesModal(id, title, description);
        });

        // Call the populatePricingModal function with appropriate data
        $('[id^=edit-pricings-btn-]').click(function() {
            var id = $(this).data('id');
            var planTitle = $(this).data('plan_title');
            var planDescription = $(this).data('plan_description');
            var planPrice = $(this).data('plan_price');
            var planFeature1 = $(this).data('plan_feature_1');
            var planFeature2 = $(this).data('plan_feature_2');
            var planFeature3 = $(this).data('plan_feature_3');
            var planFeature4 = $(this).data('plan_feature_4');
            populatePricingModal(id, planTitle, planDescription, planPrice, planFeature1, planFeature2,
                planFeature3, planFeature4);
        });

        // Call the populateFooterModal function with appropriate data
        $('#edit-footer-btn').click(function() {
            var id = $(this).data('id');
            var title = $(this).data('title');
            var description = $(this).data('description');
            populateFooterModal(id, title, description);
        });


        // Function to populate Home Section Edit Modal
        function populateHomeModal(id, title, description, picture) {
            $('#homeId').val(id);
            $('#editTitle').val(title);
            $('#editDescription').val(description);
            $('#pictureThumbnail').attr('src', picture ? "{{ asset('') }}" + picture : '');
            $('#editHomeModal').modal('show');
        }

        // Function to populate About Section Edit Modal
        function populateAboutModal(id, headingTitle, headingDescription, whoWeAre, ourVision, ourHistory, picture) {
            $('#aboutId').val(id);
            $('#editHeadingTitle').val(headingTitle);
            $('#editHeadingDescription').val(headingDescription);
            $('#editWhoWeAre').val(whoWeAre);
            $('#editOurVision').val(ourVision);
            $('#editOurHistory').val(ourHistory);
            $('#pictureThumbnail2').attr('src', picture ? "{{ asset('') }}" + picture : '');
            $('#editAboutModal').modal('show');
        }

        // Function to populate Services Section Edit Modal
        function populateServicesModal(id, title, description) {
            $('#servicesId').val(id);
            $('#editServicesTitle').val(title);
            $('#editServicesDescription').val(description);
            $('#editServicesModal').modal('show');
        }

        // Function to populate Pricing Section Edit Modal
        function populatePricingModal(id, planTitle, planDescription, planPrice, planFeature1, planFeature2,
            planFeature3, planFeature4) {
            $('#pricingId').val(id);
            $('#editPlanTitle').val(planTitle);
            $('#editPlanDescription').val(planDescription);
            $('#editPlanPrice').val(planPrice);
            $('#editPlanFeature1').val(planFeature1);
            $('#editPlanFeature2').val(planFeature2);
            $('#editPlanFeature3').val(planFeature3);
            $('#editPlanFeature4').val(planFeature4);
            $('#editPricingModal').modal('show');
        }

        // Function to populate Footer Section Edit Modal
        function populateFooterModal(id, title, description) {
            $('#footerId').val(id);
            $('#editFooterTitle').val(title);
            $('#editFooterDescription').val(description);
            $('#editFooterModal').modal('show');
        }

    });
</script>

<script type="text/javascript">
    {{-- Success Message --}}
    @if (Session::has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Done',
            text: '{{ Session::get('success') }}',
            confirmButtonColor: "#21356a"
        });
    @endif
    {{-- Errors Message --}}
    @if (Session::has('error'))
        Swal.fire({
            icon: 'error',
            title: 'Opps!!!',
            text: '{{ Session::get('error') }}',
            confirmButtonColor: "#21356a"
        });
    @endif
    @if (Session::has('errors') || (isset($errors) && is_array($errors) && $errors->any()))
        Swal.fire({
            icon: 'error',
            title: 'Opps!!!',
            text: '{{ Session::get('errors')->first() }}',
            confirmButtonColor: "#21356a"
        });
    @endif
</script>
