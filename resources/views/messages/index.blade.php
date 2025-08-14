<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Contact Messages</h1>

        <div class="bg-white shadow rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($messages as $msg)
                            <tr>
                                <td class="px-4 py-3 whitespace-nowrap">{{ $msg->first_name }} {{ $msg->last_name }}</td>
                                <td class="px-4 py-3 whitespace-nowrap"><a href="mailto:{{ $msg->email }}" class="text-blue-600 hover:underline">{{ $msg->email }}</a></td>
                                <td class="px-4 py-3 whitespace-nowrap">{{ $msg->phone }}</td>
                                <td class="px-4 py-3 whitespace-nowrap">{{ $msg->event_type }}</td>
                                <td class="px-4 py-3">{{ Str::limit($msg->message, 120) }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">{{ $msg->created_at->format('Y-m-d H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-4">{{ $messages->links() }}</div>
        </div>
    </div>
</body>
</html>


