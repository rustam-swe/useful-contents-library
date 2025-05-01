<x-layouts.main>
    <x-slot name="title">All Contents</x-slot>
    
    <x-slot name="styles">
        <style>
            .content-card:hover {
                transform: translateY(-2px);
                transition: transform 0.2s ease-in-out;
            }
        </style>
    </x-slot>
    
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4 d-flex justify-content-between align-items-center">
                <h2 class="mb-0">All Contents</h2>
                <a href="/contents/create" class="btn btn-primary">Add New Content</a>
            </div>
            
            <!-- Dummy Content Cards -->
            <div class="col-md-4 mb-4">
                <div class="card content-card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Getting Started with Laravel</h5>
                        <p class="card-text text-muted mb-3">A comprehensive guide to getting started with Laravel framework, covering basic concepts and setup.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/contents/1" class="btn btn-outline-primary">Read More</a>
                            <span class="badge bg-secondary">Tutorial</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card content-card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Laravel Security</h5>
                        <p class="card-text text-muted mb-3">Learn about advanced security practices in Laravel applications, including authentication and authorization.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/contents/2" class="btn btn-outline-primary">Read More</a>
                            <span class="badge bg-info">Security</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card content-card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Database Optimization Tips</h5>
                        <p class="card-text text-muted mb-3">Essential tips and tricks for optimizing your Laravel database queries and relationships.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/contents/3" class="btn btn-outline-primary">Read More</a>
                            <span class="badge bg-success">Performance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
    <x-slot name="scripts">
        <script>
            // Add any page-specific JavaScript here
        </script>
    </x-slot>
</x-layouts.main>