<div class="col-span-1">
  <div class="border rounded-md mb-4">
    <div class="bg-slate-200 p-4">Search</div>
    <div class="p-4">
      <form action="{% url 'search' %}" method="POST" class="grid grid-cols-4 gap-2">
        {{ csrf_field() }}
        <input
          type="text"
          name="q"
          id="search"
          class="border rounded-md w-full focus:ring p-2 col-span-3"
          placeholder="Search something..."
        />
        <button
          type="submit"
          class="bg-blue-500 hover:bg-blue-700 rounded-md p-2 text-white uppercase font-semibold font-sans w-full focus:ring col-span-1"
        >
          Search
        </button>
      </form>
    </div>
  </div>
  <div class="border rounded-md mb-4">
    <div class="bg-slate-200 p-4">Categories</div>
    <div class="p-4">
      <ul class="list-none list-inside">
        {% for category in categories %}
        <li>
          <a
            href="{% url 'category' category.slug %}"
            class="text-blue-500 hover:underline"
            >{{ category.name }}</a
          >
        </li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class="border rounded-md mb-4">
    <div class="bg-slate-200 p-4">Tags</div>
    <div class="p-4">
      {% for tag in tags %}
      <span class="mr-2"
        ><a
          href="{% url 'tag' tag.slug %}"
          class="text-blue-500 hover:underline"
          >{{ tag.name }}</a
        ></span
      >
      {% endfor %}
    </div>
  </div>
  <div class="border rounded-md mb-4">
    <div class="bg-slate-200 p-4">More Card</div>
    <div class="p-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
        voluptatem ab tempore recusandae sequi libero sapiente autem! Sit hic
        reprehenderit pariatur autem totam, voluptates non officia accusantium
        rerum unde provident!
      </p>
    </div>
  </div>
  <div class="border rounded-md mb-4">
    <div class="bg-slate-200 p-4">...</div>
    <div class="p-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
        voluptatem ab tempore recusandae sequi libero sapiente autem! Sit hic
        reprehenderit pariatur autem totam, voluptates non officia accusantium
        rerum unde provident!
      </p>
    </div>
  </div>
</div>