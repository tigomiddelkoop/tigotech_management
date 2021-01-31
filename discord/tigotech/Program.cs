using System;
using System.Threading.Tasks;
using Discord;
using Discord.Commands;
using Discord.WebSocket;

namespace tigotech
{
    class Program
    {
        public static DiscordSocketClient _client { get; private set; }
        // The tigo.tech serverid. I want to move this to a config file so other might use this bot as well
        public static ulong ServerId { get; } = 803075300979769345;
        private CommandService _commands;

        public static void  Main(string[] args)
            => new Program().MainAsync().GetAwaiter().GetResult();


        private async Task MainAsync()
        {
            _client = new DiscordSocketClient(new DiscordSocketConfig
            {
                LogLevel = LogSeverity.Debug,
            });

            _commands = new CommandService(new CommandServiceConfig
            {
                LogLevel = LogSeverity.Debug,
                CaseSensitiveCommands = false,
            });


            Console.WriteLine("Token");
            Console.WriteLine(Environment.GetEnvironmentVariable("token"));
            String token = Environment.GetEnvironmentVariable("token");

            // Set the Log, MessageReceived, UserJoined and UserLeft listeners
            _client.Log += Log;
            _client.MessageReceived += CommandHandler.HandleCommandAsync;
            _client.UserJoined += UserJoined.HandleJoin;
            _client.UserLeft += UserLeft.HandleLeft;
            Game game = new Game("with Kubernetes", ActivityType.Playing);
            await _client.SetActivityAsync(game);
            await _client.SetStatusAsync(UserStatus.Online);
            
            // Login and start the bot
            await _client.LoginAsync(TokenType.Bot, token);
            await _client.StartAsync();
            
            await Task.Delay(-1);
        }

        private Task Log(LogMessage msg)
        {
            Console.WriteLine("[" + msg.Severity + "/" + msg.Source + "] " + msg.Message);
            return Task.CompletedTask;
        }
    }
}