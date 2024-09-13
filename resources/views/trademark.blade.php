@extends('partials.layout')

@pushOnce('head')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endPushOnce

@section('content')
    @include('partials.header')

    <div class="relative overflow-hidden">
        <div class="relative max-w-screen-xl mx-auto px-5 pt-12 md:pt-12">
            <div class="flex items-center gap-6">
                <h1 class="text-4xl font-medium">Trademark Policy</h1>
                <x-button.secondary href="#request-form">Make a Request</x-button.secondary>
            </div>

            <div class="mt-8 space-y-4 max-w-4xl">
                <p class="italic">This Trademarks and Logos use policy (the "Policy") is based on the Ubuntu trademark policy and published under the CC-BY-SA license. You are welcome to base your own project trademark policies off it, just let others use your changes and give credit to the Ubuntu project as the original source!</p>
                <p>The objective of the Policy is to encourage widespread use of the Laravel trademarks by the Laravel community while controlling that use in order to avoid confusion on the part of Laravel users and the general public, to maintain the value of the image and reputation of the trademarks and to protect them from inappropriate or unauthorised use.</p>
                <p>The sections below describe what is allowed, what isn't allowed, and cases in which you should ask permission.</p>
                <h2 class="pt-6 text-2xl font-medium">The Trademarks and Logos</h2>
                <p>Laravel owns trademarks containing in whole or part the word "Laravel".</p>
                <p>Any verbal mark starting with the letters "Laravel" is sufficiently similar to one or more of the trademarks that permission will be needed in order to use it.</p>
                <p>All verbal trademarks of Laravel, all distinctive signs used in commerce by Laravel to designate his products or services related to Laravel are collectively referred to as the "Trademarks".</p>
                <h2 class="pt-6 text-2xl font-medium">Permitted use of the Trademarks</h2>
                <p>Certain usages of the Trademarks are fine and no specific permission from us is needed.</p>
                <p>Laravel is built by, and largely for, its community. We share access to the Trademarks with the entire community for the purposes of discussion, development and advocacy. We recognize that most of the open source discussion and development areas are for non-commercial purposes and will allow the use of the Trademarks in this context, provided:</p>
                <ul class="ml-4 list-disc space-y-2">
                    <li>The Trademark is used in a manner consistent with this Policy;</li>
                    <li>There is no commercial intent behind the use;</li>
                    <li>What you are referring to is in fact Laravel. If someone is confused into thinking that what isn't Laravel is in fact Laravel, you are probably doing something wrong;</li>
                    <li>There is no suggestion (through words or appearance) that your project is approved, sponsored, or affiliated with Laravel, Laravel or its related projects unless it actually has been approved by and is accountable to Laravel.</li>
                </ul>
                <p><span class="font-bold">Building on Laravel or for Laravel.</span> If you are producing new software which is intended for use with or on Laravel, you may use the Trademark in a way which indicates the intent of your product. For example, if you are developing a system management tool for Laravel, acceptable project titles would be "System Management for Laravel" or "Laravel Based Systems Management". We would strongly discourage, and likely would consider to be problematic, a name such as LaravelMan, Laravel Management, LaraMan, etc. Furthermore, you may not use the Trademarks in a way which implies an endorsement where that doesn't exist, or which attempts to unfairly or confusingly capitalise on the goodwill or brand of the project.</p>
                <p>We reserve the right to review all usage within the open source community, and to object to any usage that appears to overstep the bounds of discussion and good-faith non-commercial development. In any event, once a project has left the open source project phase or otherwise become a commercial project, this Policy does not authorise any use of the Trademarks in connection to that project.</p>
                <h2 class="pt-6 text-2xl font-medium">Restricted use that requires a trademark license</h2>
                <p>Permission from us is necessary to use any of the Trademarks under any circumstances other than those specifically permitted above. Including:</p>
                <ul class="ml-4 list-disc space-y-2">
                    <li>Any commercial use including for any services related to Laravel such as providing training services, conference services, or design services (should you wish to provide such services, please contact us beforehand to explore Laravel's Partnership Program);</li>
                    <li>Use on or in relation to a software product that includes or is built on top of a product supplied by us, if there is any commercial intent associated with that product;</li>
                    <li>Use in a domain name or URL;</li>
                    <li>Use for services relating to any of the above.</li>
                </ul>
                <p>If you wish to have permission for any of the uses above or for any other use which is not specifically referred to in this Policy, please contact us and we'll let you know as soon as possible if your proposed use is permissible. Permission may only be granted subject to certain conditions and these may include the requirement that you enter into an agreement with us to maintain the quality of the product and/or service which you intend to supply at a prescribed level.</p>
            </div>

            <div id="request-form" class="mt-20 scroll-m-20 max-w-xl">
                <h2 class="text-3xl font-medium">Make a Trademark Request</h2>
                <form action="https://fieldgoal.io/f/O3Xsqr" method="POST" class="mt-8 space-y-4">
                    <div>
                        <x-forms.label for="name">Name</x-forms.label>
                        <x-forms.input name="name" class="mt-2" required />
                    </div>
                    <div>
                        <x-forms.label for="organization">Organization</x-forms.label>
                        <x-forms.input name="organization" class="mt-2" required />
                    </div>
                    <div>
                        <x-forms.label for="email">Email</x-forms.label>
                        <x-forms.input name="email" class="mt-2" required type="email" />
                    </div>
                    <div class="!mt-8">
                        <x-forms.label>Requested Use (check all that apply)</x-forms.label>
                        <div class="mt-4 flex items-start gap-2.5">
                            <x-forms.checkbox id="requested_use_1" name="requested_use" value="Commercial Use (training, event, or other services)" />
                            <x-forms.label for="requested_use_1" class="!font-normal">Commercial Use (training, event, or other services)</x-forms.label>
                        </div>
                        <div class="mt-2 flex items-start gap-2.5">
                            <x-forms.checkbox id="requested_use_2" name="requested_use" value="Commercial Use (training, event, or other services)" />
                            <x-forms.label for="requested_use_2" class="!font-normal">Software Product</x-forms.label>
                        </div>
                        <div class="mt-2 flex items-start gap-2.5">
                            <x-forms.checkbox id="requested_use_3" name="requested_use" value="Commercial Use (training, event, or other services)" />
                            <x-forms.label for="requested_use_3" class="!font-normal">Domain Name or URL</x-forms.label>
                        </div>
                        <div class="mt-2 flex items-start gap-2.5">
                            <x-forms.checkbox id="requested_use_4" name="requested_use" value="Commercial Use (training, event, or other services)" />
                            <x-forms.label for="requested_use_4" class="!font-normal">Another type of service</x-forms.label>
                        </div>
                    </div>
                    <div>
                        <x-forms.label for="details">Details</x-forms.label>
                        <x-forms.textarea name="details" class="mt-2 min-h-[160px]" required />
                    </div>
                    <div class="min-h-[78px] g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                    <x-button.primary type="submit" class="w-full !mt-8">Submit Request</x-button.primary>
                </form>
            </div>
        </div>
    </div>
@stop
