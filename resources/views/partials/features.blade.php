<x-tabs>
    <x-tabs.tab name="authentication" title="Authentication" icon="lock-closed">
        <p>Authenticating users is as simple as adding an authentication middleware to your Laravel route definition:</p>

        <pre><x-torchlight-code language="php">
            Route::get('/profile', ProfileController::class)
                ->middleware('auth');
        </x-torchlight-code></pre>

        <p>Once the user is authenticated, you can access the authenticated user via the <code>Auth</code> facade:</p>

        <pre><x-torchlight-code language="php">
            use Illuminate\Support\Facades\Auth;

            // Get the currently authenticated user...
            $user = Auth::user();
        </x-torchlight-code></pre>

        <p>Of course, you may define your own authentication middleware, allowing you to customize the authentication process.</p>

        <p>For more information on Laravel's authentication features, check out the <a href="https://laravel.com/docs/authentication">authentication documentation</a>.</p>
    </x-tabs.tab>

    <x-tabs.tab name="authorization" title="Authorization" icon="identification">
        <p>You'll often need to check whether an authenticated user is authorized to perform a specific action. Laravel's model policies make it a breeze:</p>

        <pre><x-torchlight-code language="bash">
            php artisan make:policy UserPolicy
        </x-torchlight-code></pre>

        <p>Once you've defined your authorization rules in the generated policy class, you can authorize the user's request in your controller methods:</p>

        <pre><x-torchlight-code language="php">
            public function update(Request $request, Invoice $invoice)
            {
                Gate::authorize('update', $invoice);// [tl! focus]

                $invoice->update(/* ... */);
            }
        </x-torchlight-code></pre>

        <p><a href="https://laravel.com/docs/authorization">Learn more</a></p>
    </x-tabs.tab>

    <x-tabs.tab name="eloquent" title="Eloquent ORM" icon="table-cells">
        <p>Scared of databases? Don't be. Laravel’s Eloquent ORM makes it painless to interact with your application's data, and models, migrations, and relationships can be quickly scaffolded:</p>

        <pre><x-torchlight-code language="text">
            php artisan make:model Invoice --migration
        </x-torchlight-code></pre>

        <p>Once you've defined your model structure and relationships, you can interact with your database using Eloquent's powerful, expressive syntax:</p>

        <pre><x-torchlight-code language="php">
            // Create a related model...
            $user->invoices()->create(['amount' => 100]);

            // Update a model...
            $invoice->update(['amount' => 200]);

            // Retrieve models...
            $invoices = Invoice::unpaid()->where('amount', '>=', 100)->get();

            // Rich API for model interactions...
            $invoices->each->pay();
        </x-torchlight-code></pre>

        <p><a href="https://laravel.com/docs/eloquent">Learn more</a></p>
    </x-tabs.tab>

    <x-tabs.tab name="migrations" title="Database Migrations" icon="circle-stack">
        <p>Migrations are like version control for your database, allowing your team to define and share your application's database schema definition:</p>

        <pre><x-torchlight-code language="php">
            public function up(): void
            {
                Schema::create('flights', function (Blueprint $table) {
                    $table->uuid()->primary();
                    $table->foreignUuid('airline_id')->constrained();
                    $table->string('name');
                    $table->timestamps();
                });
            }
        </x-torchlight-code></pre>

        <p><a href="https://laravel.com/docs/migrations">Learn more</a></p>
    </x-tabs.tab>

    <x-tabs.tab name="validation" title="Validation" icon="check-badge">
        <p>Laravel has over 90 powerful, built-in validation rules and, using Laravel Precognition, can provide live validation on your frontend:</p>

        <pre><x-torchlight-code language="php">
            public function update(Request $request)
            {
                $validated = $request->validate([// [tl! focus:start]
                    'email' => 'required|email|unique:users',
                    'password' => Password::required()->min(8)->uncompromised(),
                ]);// [tl! focus:end]

                $request->user()->update($validated);
            }
        </x-torchlight-code></pre>

        <p><a href="https://laravel.com/docs/validation">Learn more</a></p>
    </x-tabs.tab>

    <x-tabs.tab name="notifications" title="Notifications & Mail" icon="bell-alert">
        <p>Use Laravel to quickly send beautifully styled notifications to your users via email, Slack, SMS, in-app, and more:</p>

        <pre><x-torchlight-code language="bash">
            php artisan make:notification InvoicePaid
        </x-torchlight-code></pre>

        <p>Once you have generated a notification, you can easily send the message to one of your application's users:</p>

        <pre><x-torchlight-code language="php">
            $user->notify(new InvoicePaid($invoice));
        </x-torchlight-code></pre>

        <p><a href="https://laravel.com/docs/notifications">Learn more</a></p>
    </x-tabs.tab>

    <x-tabs.tab name="storage" title="File Storage" icon="archive-box">
        <p>Laravel provides a robust filesystem abstraction layer, providing a single, unified API for interacting with local filesystems and cloud based filesystems like Amazon S3:</p>

        <pre><x-torchlight-code language="php">
            $path = $request->file('avatar')->store('s3');
        </x-torchlight-code></pre>

        <p>Regardless of where your files are stored, interact with them using Laravel's simple, elegant syntax:</p>

        <pre><x-torchlight-code language="php">
            $content = Storage::get('photo.jpg');

            Storage::put('photo.jpg', $content);
        </x-torchlight-code></pre>

        <p><a href="https://laravel.com/docs/filesystem">Learn more</a></p>
    </x-tabs.tab>

    <x-tabs.tab name="queues" title="Job Queues" icon="queue-list">
        <p>Laravel lets you to offload slow jobs to a background queue, keeping your web requests snappy:</p>

        <pre><x-torchlight-code language="php">
            $podcast = Podcast::create(/* ... */);

            ProcessPodcast::dispatch($podcast)->onQueue('podcasts');// [tl! focus]
        </x-torchlight-code></pre>

        <p>You can run as many queue workers as you need to handle your workload:</p>

        <pre><x-torchlight-code language="bash">
            php artisan queue:work redis --queue=podcasts
        </x-torchlight-code></pre>

        <p>For more visibility and control over your queues, <a href="https://laravel.com/docs/horizon">Laravel Horizon</a> provides a beautiful dashboard and code-driven configuration for your Laravel-powered Redis queues.</p>

        <p><strong>Learn more</strong></p>
        <ul>
            <li><a href="https://laravel.com/docs/queues">Job Queues</a></li>
            <li><a href="https://laravel.com/docs/horizon">Laravel Horizon</a></li>
        </ul>
    </x-tabs.tab>

    <x-tabs.tab name="scheduling" title="Task Scheduling" icon="clock">
        <p>Schedule recurring jobs and commands with an expressive syntax and say goodbye to complicated configuration files:</p>

        <pre><x-torchlight-code language="php">
            $schedule->job(NotifySubscribers::class)->hourly();
        </x-torchlight-code></pre>

        <p>Laravel's scheduler can even handle multiple servers and offers built-in overlap prevention:</p>

        <pre><x-torchlight-code language="php">
            $schedule->job(NotifySubscribers::class)
                ->dailyAt('9:00')
                ->onOneServer();
                ->withoutOverlapping();
        </x-torchlight-code></pre>

        <p><a href="https://laravel.com/docs/scheduling">Learn more</a></p>
    </x-tabs.tab>

    <x-tabs.tab name="testing" title="Testing" icon="command-line">
        <p>Laravel is built for testing. From unit tests to browser tests, you’ll feel more confident in deploying your application:</p>

        <pre><x-torchlight-code language="php">
            $user = User::factory()->create();

            $this->browse(fn (Browser $browser) => $browser
                ->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->press('Login')
                ->assertPathIs('/home')
                ->assertSee("Welcome {$user->name}")
            );
        </x-torchlight-code></pre>

        <p><a href="https://laravel.com/docs/testing">Learn more</a></p>
    </x-tabs.tab>

    <x-tabs.tab name="events" title="Events & WebSockets" icon="arrows-right-left">
        <p>Laravel's events allow you to send and listen for events across your application, and listeners can easily be dispatched to a background queue:</p>

        <pre><x-torchlight-code language="php">
            OrderShipped::dispatch($order);
        </x-torchlight-code></pre>

        <pre><x-torchlight-code language="php">
            class SendShipmentNotification implements ShouldQueue
            {
                public function handle(OrderShipped $event): void
                {
                    // ...
                }
            }
        </x-torchlight-code></pre>

        <p>Your frontend application can even subscribe to your Laravel events using <a href="https://laravel.com/docs/broadcasting">Laravel Echo</a> and WebSockets, allowing you to build real-time, dynamic applications:</p>

        <pre><x-torchlight-code language="javascript">
            Echo.private(`orders.${orderId}`)
                .listen('OrderShipped', (e) => {
                    console.log(e.order);
                });
        </x-torchlight-code></pre>

        <p><a href="https://laravel.com/docs/events">Learn more</a></p>
    </x-tabs.tab>
</x-tabs>
