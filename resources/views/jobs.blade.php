<x-layout>
  <x-slot:heading>Jobs Listings</x-slot:heading>
  <ul class="list-disc">
    @foreach ( $jobs as $job )
    <li>
      <a class="text-blue-500 hover:underline" href="/jobs/{{ $job['id'] }}">
        <strong>{{ $job['title'] }}:</strong> Pays {{$job['salary']}} per year.
      </a>
    </li>
    @endforeach
  </ul>
</x-layout>