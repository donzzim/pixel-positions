<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                <x-tag>Design</x-tag>
                <x-tag>Development</x-tag>
                <x-tag>Marketing</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Customer Success</x-tag>
                <x-tag>Finance</x-tag>
                <x-tag>Human Resources</x-tag>
                <x-tag>Legal</x-tag>
                <x-tag>Product</x-tag>
                <x-tag>Project Management</x-tag>
                <x-tag>Quality Assurance</x-tag>
                <x-tag>DevOps</x-tag>
                <x-tag>Data Science</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

        </section>
    </div>
</x-layout>
