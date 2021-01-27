using System;
using System.Threading.Tasks;
using Discord;
using Discord.Commands;
using Discord.WebSocket;

namespace tigotech
{
    class Program
    {
        public static DiscordSocketClient _client { get; set; }
        private CommandService _commands;

        public static void Main(string[] args)
            => new Program().MainAsync().GetAwaiter().GetResult();
        
        
        public async Task MainAsync()
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

            _client.Log += Log;

            const string token = "";
            

            _client.MessageReceived += CommandHandler.HandleCommandAsync;
            _client.UserJoined += UserJoined.HandleJoin;
            await _client.LoginAsync(TokenType.Bot, token);
            await _client.StartAsync();

            Game game = new Game("tigo.tech", ActivityType.Watching);
            await _client.SetActivityAsync(game);
            await _client.SetStatusAsync(UserStatus.Online);

            await Task.Delay(-1);
        }

        private Task Log(LogMessage msg)
        {
            Console.WriteLine("[" + msg.Severity + "/" + msg.Source + "] " + msg.Message);
            return Task.CompletedTask;
        }
    }
}