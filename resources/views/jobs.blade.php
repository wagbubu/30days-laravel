<x-layout>
  <x-slot:heading>Jobs Listings</x-slot:heading>
  <ul class="list-disc">
    @foreach ( $jobs as $job )
    <li>
      <a href="/jobs/{{ $job['id'] }}">
        <strong>{{ $job['title'] }}:</strong> Pays {{$job['salary']}} per year.
      </a>
    </li>
    @endforeach
  </ul>
</x-layout>