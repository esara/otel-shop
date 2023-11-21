'use strict';

const { MeterProvider, PeriodicExportingMetricReader } = require('@opentelemetry/sdk-metrics');
const { OTLPMetricExporter } = require('@opentelemetry/exporter-metrics-otlp-grpc');

const otlpExporter = new OTLPMetricExporter({
  url: process.env.OTEL_EXPORTER_OTLP_ENDPOINT
});

const meterProvider = new MeterProvider({});

meterProvider.addMetricReader(new PeriodicExportingMetricReader({
  exporter: otlpExporter,
  exportIntervalMillis: 1000,
}));

const meter = meterProvider.getMeter('user-meter');

const requestCount = meter.createCounter("requests", {
  description: "Count all incoming requests"
});

module.exports.countAllRequests = () => {
  return (req, res, next) => {

    requestCount.add(1, { route: req.path })

    next();
  };
};
